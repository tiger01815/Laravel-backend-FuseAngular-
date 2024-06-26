<?php

$mapping = array(
    'Xsolla\SDK\Version' => __DIR__ . '/Xsolla/SDK/Version.php',
    'Xsolla\SDK\Exception\XsollaException' => __DIR__ . '/Xsolla/SDK/Exception/XsollaException.php',
    'Xsolla\SDK\Exception\Webhook\InvalidParameterException' => __DIR__ . '/Xsolla/SDK/Exception/Webhook/InvalidParameterException.php',
    'Xsolla\SDK\Exception\Webhook\ClientErrorException' => __DIR__ . '/Xsolla/SDK/Exception/Webhook/ClientErrorException.php',
    'Xsolla\SDK\Exception\Webhook\InvalidUserException' => __DIR__ . '/Xsolla/SDK/Exception/Webhook/InvalidUserException.php',
    'Xsolla\SDK\Exception\Webhook\ServerErrorException' => __DIR__ . '/Xsolla/SDK/Exception/Webhook/ServerErrorException.php',
    'Xsolla\SDK\Exception\Webhook\InvalidAmountException' => __DIR__ . '/Xsolla/SDK/Exception/Webhook/InvalidAmountException.php',
    'Xsolla\SDK\Exception\Webhook\InvalidClientIpException' => __DIR__ . '/Xsolla/SDK/Exception/Webhook/InvalidClientIpException.php',
    'Xsolla\SDK\Exception\Webhook\XsollaWebhookException' => __DIR__ . '/Xsolla/SDK/Exception/Webhook/XsollaWebhookException.php',
    'Xsolla\SDK\Exception\Webhook\InvalidSignatureException' => __DIR__ . '/Xsolla/SDK/Exception/Webhook/InvalidSignatureException.php',
    'Xsolla\SDK\Exception\Webhook\InvalidInvoiceException' => __DIR__ . '/Xsolla/SDK/Exception/Webhook/InvalidInvoiceException.php',
    'Xsolla\SDK\Exception\API\XsollaAPIException' => __DIR__ . '/Xsolla/SDK/Exception/API/XsollaAPIException.php',
    'Xsolla\SDK\Exception\API\UnprocessableEntityException' => __DIR__ . '/Xsolla/SDK/Exception/API/UnprocessableEntityException.php',
    'Xsolla\SDK\Exception\API\AccessDeniedException' => __DIR__ . '/Xsolla/SDK/Exception/API/AccessDeniedException.php',
    'Xsolla\SDK\Webhook\WebhookServer' => __DIR__ . '/Xsolla/SDK/Webhook/WebhookServer.php',
    'Xsolla\SDK\Webhook\WebhookRequest' => __DIR__ . '/Xsolla/SDK/Webhook/WebhookRequest.php',
    'Xsolla\SDK\Webhook\User' => __DIR__ . '/Xsolla/SDK/Webhook/User.php',
    'Xsolla\SDK\Webhook\Message\UserValidationMessage' => __DIR__ . '/Xsolla/SDK/Webhook/Message/UserValidationMessage.php',
    'Xsolla\SDK\Webhook\Message\RefundMessage' => __DIR__ . '/Xsolla/SDK/Webhook/Message/RefundMessage.php',
    'Xsolla\SDK\Webhook\Message\PaymentMessage' => __DIR__ . '/Xsolla/SDK/Webhook/Message/PaymentMessage.php',
    'Xsolla\SDK\Webhook\Message\GetPinCodeMessage' => __DIR__ . '/Xsolla/SDK/Webhook/Message/GetPinCodeMessage.php',
    'Xsolla\SDK\Webhook\Message\Message' => __DIR__ . '/Xsolla/SDK/Webhook/Message/Message.php',
    'Xsolla\SDK\Webhook\Message\UpdateSubscriptionMessage' => __DIR__ . '/Xsolla/SDK/Webhook/Message/UpdateSubscriptionMessage.php',
    'Xsolla\SDK\Webhook\Message\CreateSubscriptionMessage' => __DIR__ . '/Xsolla/SDK/Webhook/Message/CreateSubscriptionMessage.php',
    'Xsolla\SDK\Webhook\Message\UserSearchMessage' => __DIR__ . '/Xsolla/SDK/Webhook/Message/UserSearchMessage.php',
    'Xsolla\SDK\Webhook\Message\CancelSubscriptionMessage' => __DIR__ . '/Xsolla/SDK/Webhook/Message/CancelSubscriptionMessage.php',
    'Xsolla\SDK\Webhook\Message\AfsRejectMessage' => __DIR__ . '/Xsolla/SDK/Webhook/Message/AfsRejectMessage.php',
    'Xsolla\SDK\Webhook\Message\UserBalanceMessage' => __DIR__ . '/Xsolla/SDK/Webhook/Message/UserBalanceMessage.php',
    'Xsolla\SDK\Webhook\Response\PinCodeResponse' => __DIR__ . '/Xsolla/SDK/Webhook/Response/PinCodeResponse.php',
    'Xsolla\SDK\Webhook\Response\UserResponse' => __DIR__ . '/Xsolla/SDK/Webhook/Response/UserResponse.php',
    'Xsolla\SDK\Webhook\WebhookResponse' => __DIR__ . '/Xsolla/SDK/Webhook/WebhookResponse.php',
    'Xsolla\SDK\Webhook\WebhookAuthenticator' => __DIR__ . '/Xsolla/SDK/Webhook/WebhookAuthenticator.php',
    'Xsolla\SDK\API\PaymentUI\TokenRequest' => __DIR__ . '/Xsolla/SDK/API/PaymentUI/TokenRequest.php',
    'Xsolla\SDK\API\PaymentUI\PaymentUIScriptRenderer' => __DIR__ . '/Xsolla/SDK/API/PaymentUI/PaymentUIScriptRenderer.php',
    'Xsolla\SDK\API\XsollaClient' => __DIR__ . '/Xsolla/SDK/API/XsollaClient.php',
    'Xsolla\SDK\API\Resources\api' => __DIR__ . '/Xsolla/SDK/API/Resources/api.php',
    'Psr\Http\Message\UriInterface' => __DIR__ . '/Psr/Http/Message/UriInterface.php',
    'Psr\Http\Message\UploadedFileInterface' => __DIR__ . '/Psr/Http/Message/UploadedFileInterface.php',
    'Psr\Http\Message\ResponseInterface' => __DIR__ . '/Psr/Http/Message/ResponseInterface.php',
    'Psr\Http\Message\RequestInterface' => __DIR__ . '/Psr/Http/Message/RequestInterface.php',
    'Psr\Http\Message\StreamInterface' => __DIR__ . '/Psr/Http/Message/StreamInterface.php',
    'Psr\Http\Message\MessageInterface' => __DIR__ . '/Psr/Http/Message/MessageInterface.php',
    'Psr\Http\Message\ServerRequestInterface' => __DIR__ . '/Psr/Http/Message/ServerRequestInterface.php',
    'Symfony\Component\EventDispatcher\Debug\WrappedListener' => __DIR__ . '/Symfony/Component/EventDispatcher/Debug/WrappedListener.php',
    'Symfony\Component\EventDispatcher\Debug\TraceableEventDispatcher' => __DIR__ . '/Symfony/Component/EventDispatcher/Debug/TraceableEventDispatcher.php',
    'Symfony\Component\EventDispatcher\EventDispatcherInterface' => __DIR__ . '/Symfony/Component/EventDispatcher/EventDispatcherInterface.php',
    'Symfony\Component\EventDispatcher\GenericEvent' => __DIR__ . '/Symfony/Component/EventDispatcher/GenericEvent.php',
    'Symfony\Component\EventDispatcher\ImmutableEventDispatcher' => __DIR__ . '/Symfony/Component/EventDispatcher/ImmutableEventDispatcher.php',
    'Symfony\Component\EventDispatcher\EventDispatcher' => __DIR__ . '/Symfony/Component/EventDispatcher/EventDispatcher.php',
    'Symfony\Component\EventDispatcher\LegacyEventDispatcherProxy' => __DIR__ . '/Symfony/Component/EventDispatcher/LegacyEventDispatcherProxy.php',
    'Symfony\Component\EventDispatcher\EventSubscriberInterface' => __DIR__ . '/Symfony/Component/EventDispatcher/EventSubscriberInterface.php',
    'Symfony\Component\EventDispatcher\DependencyInjection\RegisterListenersPass' => __DIR__ . '/Symfony/Component/EventDispatcher/DependencyInjection/RegisterListenersPass.php',
    'Symfony\Component\EventDispatcher\DependencyInjection\AddEventAliasesPass' => __DIR__ . '/Symfony/Component/EventDispatcher/DependencyInjection/AddEventAliasesPass.php',
    'Symfony\Component\HttpFoundation\Test\Constraint\ResponseIsRedirected' => __DIR__ . '/Symfony/Component/HttpFoundation/Test/Constraint/ResponseIsRedirected.php',
    'Symfony\Component\HttpFoundation\Test\Constraint\ResponseCookieValueSame' => __DIR__ . '/Symfony/Component/HttpFoundation/Test/Constraint/ResponseCookieValueSame.php',
    'Symfony\Component\HttpFoundation\Test\Constraint\ResponseHeaderSame' => __DIR__ . '/Symfony/Component/HttpFoundation/Test/Constraint/ResponseHeaderSame.php',
    'Symfony\Component\HttpFoundation\Test\Constraint\ResponseStatusCodeSame' => __DIR__ . '/Symfony/Component/HttpFoundation/Test/Constraint/ResponseStatusCodeSame.php',
    'Symfony\Component\HttpFoundation\Test\Constraint\ResponseHasHeader' => __DIR__ . '/Symfony/Component/HttpFoundation/Test/Constraint/ResponseHasHeader.php',
    'Symfony\Component\HttpFoundation\Test\Constraint\ResponseIsSuccessful' => __DIR__ . '/Symfony/Component/HttpFoundation/Test/Constraint/ResponseIsSuccessful.php',
    'Symfony\Component\HttpFoundation\Test\Constraint\ResponseHasCookie' => __DIR__ . '/Symfony/Component/HttpFoundation/Test/Constraint/ResponseHasCookie.php',
    'Symfony\Component\HttpFoundation\Test\Constraint\RequestAttributeValueSame' => __DIR__ . '/Symfony/Component/HttpFoundation/Test/Constraint/RequestAttributeValueSame.php',
    'Symfony\Component\HttpFoundation\Cookie' => __DIR__ . '/Symfony/Component/HttpFoundation/Cookie.php',
    'Symfony\Component\HttpFoundation\File\Stream' => __DIR__ . '/Symfony/Component/HttpFoundation/File/Stream.php',
    'Symfony\Component\HttpFoundation\File\File' => __DIR__ . '/Symfony/Component/HttpFoundation/File/File.php',
    'Symfony\Component\HttpFoundation\File\Exception\ExtensionFileException' => __DIR__ . '/Symfony/Component/HttpFoundation/File/Exception/ExtensionFileException.php',
    'Symfony\Component\HttpFoundation\File\Exception\IniSizeFileException' => __DIR__ . '/Symfony/Component/HttpFoundation/File/Exception/IniSizeFileException.php',
    'Symfony\Component\HttpFoundation\File\Exception\NoTmpDirFileException' => __DIR__ . '/Symfony/Component/HttpFoundation/File/Exception/NoTmpDirFileException.php',
    'Symfony\Component\HttpFoundation\File\Exception\UnexpectedTypeException' => __DIR__ . '/Symfony/Component/HttpFoundation/File/Exception/UnexpectedTypeException.php',
    'Symfony\Component\HttpFoundation\File\Exception\CannotWriteFileException' => __DIR__ . '/Symfony/Component/HttpFoundation/File/Exception/CannotWriteFileException.php',
    'Symfony\Component\HttpFoundation\File\Exception\UploadException' => __DIR__ . '/Symfony/Component/HttpFoundation/File/Exception/UploadException.php',
    'Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException' => __DIR__ . '/Symfony/Component/HttpFoundation/File/Exception/AccessDeniedException.php',
    'Symfony\Component\HttpFoundation\File\Exception\FileException' => __DIR__ . '/Symfony/Component/HttpFoundation/File/Exception/FileException.php',
    'Symfony\Component\HttpFoundation\File\Exception\NoFileException' => __DIR__ . '/Symfony/Component/HttpFoundation/File/Exception/NoFileException.php',
    'Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException' => __DIR__ . '/Symfony/Component/HttpFoundation/File/Exception/FileNotFoundException.php',
    'Symfony\Component\HttpFoundation\File\Exception\PartialFileException' => __DIR__ . '/Symfony/Component/HttpFoundation/File/Exception/PartialFileException.php',
    'Symfony\Component\HttpFoundation\File\Exception\FormSizeFileException' => __DIR__ . '/Symfony/Component/HttpFoundation/File/Exception/FormSizeFileException.php',
    'Symfony\Component\HttpFoundation\File\UploadedFile' => __DIR__ . '/Symfony/Component/HttpFoundation/File/UploadedFile.php',
    'Symfony\Component\HttpFoundation\IpUtils' => __DIR__ . '/Symfony/Component/HttpFoundation/IpUtils.php',
    'Symfony\Component\HttpFoundation\HeaderUtils' => __DIR__ . '/Symfony/Component/HttpFoundation/HeaderUtils.php',
    'Symfony\Component\HttpFoundation\Session\SessionBagInterface' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/SessionBagInterface.php',
    'Symfony\Component\HttpFoundation\Session\Flash\FlashBag' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Flash/FlashBag.php',
    'Symfony\Component\HttpFoundation\Session\Flash\AutoExpireFlashBag' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Flash/AutoExpireFlashBag.php',
    'Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Flash/FlashBagInterface.php',
    'Symfony\Component\HttpFoundation\Session\SessionBagProxy' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/SessionBagProxy.php',
    'Symfony\Component\HttpFoundation\Session\SessionUtils' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/SessionUtils.php',
    'Symfony\Component\HttpFoundation\Session\Attribute\NamespacedAttributeBag' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Attribute/NamespacedAttributeBag.php',
    'Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Attribute/AttributeBagInterface.php',
    'Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Attribute/AttributeBag.php',
    'Symfony\Component\HttpFoundation\Session\SessionInterface' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/SessionInterface.php',
    'Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/MockFileSessionStorage.php',
    'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/NativeSessionStorage.php',
    'Symfony\Component\HttpFoundation\Session\Storage\Proxy\AbstractProxy' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/Proxy/AbstractProxy.php',
    'Symfony\Component\HttpFoundation\Session\Storage\Proxy\SessionHandlerProxy' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/Proxy/SessionHandlerProxy.php',
    'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/MetadataBag.php',
    'Symfony\Component\HttpFoundation\Session\Storage\SessionStorageInterface' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/SessionStorageInterface.php',
    'Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/PhpBridgeSessionStorage.php',
    'Symfony\Component\HttpFoundation\Session\Storage\MockArraySessionStorage' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/MockArraySessionStorage.php',
    'Symfony\Component\HttpFoundation\Session\Storage\Handler\PdoSessionHandler' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/Handler/PdoSessionHandler.php',
    'Symfony\Component\HttpFoundation\Session\Storage\Handler\IdentityMarshaller' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/Handler/IdentityMarshaller.php',
    'Symfony\Component\HttpFoundation\Session\Storage\Handler\RedisSessionHandler' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/Handler/RedisSessionHandler.php',
    'Symfony\Component\HttpFoundation\Session\Storage\Handler\MongoDbSessionHandler' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/Handler/MongoDbSessionHandler.php',
    'Symfony\Component\HttpFoundation\Session\Storage\Handler\MigratingSessionHandler' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/Handler/MigratingSessionHandler.php',
    'Symfony\Component\HttpFoundation\Session\Storage\Handler\MemcachedSessionHandler' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/Handler/MemcachedSessionHandler.php',
    'Symfony\Component\HttpFoundation\Session\Storage\Handler\MarshallingSessionHandler' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/Handler/MarshallingSessionHandler.php',
    'Symfony\Component\HttpFoundation\Session\Storage\Handler\SessionHandlerFactory' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/Handler/SessionHandlerFactory.php',
    'Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/Handler/StrictSessionHandler.php',
    'Symfony\Component\HttpFoundation\Session\Storage\Handler\AbstractSessionHandler' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/Handler/AbstractSessionHandler.php',
    'Symfony\Component\HttpFoundation\Session\Storage\Handler\NullSessionHandler' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/Handler/NullSessionHandler.php',
    'Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Storage/Handler/NativeFileSessionHandler.php',
    'Symfony\Component\HttpFoundation\Session\Session' => __DIR__ . '/Symfony/Component/HttpFoundation/Session/Session.php',
    'Symfony\Component\HttpFoundation\RedirectResponse' => __DIR__ . '/Symfony/Component/HttpFoundation/RedirectResponse.php',
    'Symfony\Component\HttpFoundation\RequestMatcher' => __DIR__ . '/Symfony/Component/HttpFoundation/RequestMatcher.php',
    'Symfony\Component\HttpFoundation\ParameterBag' => __DIR__ . '/Symfony/Component/HttpFoundation/ParameterBag.php',
    'Symfony\Component\HttpFoundation\JsonResponse' => __DIR__ . '/Symfony/Component/HttpFoundation/JsonResponse.php',
    'Symfony\Component\HttpFoundation\ExpressionRequestMatcher' => __DIR__ . '/Symfony/Component/HttpFoundation/ExpressionRequestMatcher.php',
    'Symfony\Component\HttpFoundation\HeaderBag' => __DIR__ . '/Symfony/Component/HttpFoundation/HeaderBag.php',
    'Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface' => __DIR__ . '/Symfony/Component/HttpFoundation/RateLimiter/RequestRateLimiterInterface.php',
    'Symfony\Component\HttpFoundation\RateLimiter\AbstractRequestRateLimiter' => __DIR__ . '/Symfony/Component/HttpFoundation/RateLimiter/AbstractRequestRateLimiter.php',
    'Symfony\Component\HttpFoundation\AcceptHeader' => __DIR__ . '/Symfony/Component/HttpFoundation/AcceptHeader.php',
    'Symfony\Component\HttpFoundation\ServerBag' => __DIR__ . '/Symfony/Component/HttpFoundation/ServerBag.php',
    'Symfony\Component\HttpFoundation\Request' => __DIR__ . '/Symfony/Component/HttpFoundation/Request.php',
    'Symfony\Component\HttpFoundation\ResponseHeaderBag' => __DIR__ . '/Symfony/Component/HttpFoundation/ResponseHeaderBag.php',
    'Symfony\Component\HttpFoundation\UrlHelper' => __DIR__ . '/Symfony/Component/HttpFoundation/UrlHelper.php',
    'Symfony\Component\HttpFoundation\Exception\JsonException' => __DIR__ . '/Symfony/Component/HttpFoundation/Exception/JsonException.php',
    'Symfony\Component\HttpFoundation\Exception\SuspiciousOperationException' => __DIR__ . '/Symfony/Component/HttpFoundation/Exception/SuspiciousOperationException.php',
    'Symfony\Component\HttpFoundation\Exception\RequestExceptionInterface' => __DIR__ . '/Symfony/Component/HttpFoundation/Exception/RequestExceptionInterface.php',
    'Symfony\Component\HttpFoundation\Exception\ConflictingHeadersException' => __DIR__ . '/Symfony/Component/HttpFoundation/Exception/ConflictingHeadersException.php',
    'Symfony\Component\HttpFoundation\Exception\BadRequestException' => __DIR__ . '/Symfony/Component/HttpFoundation/Exception/BadRequestException.php',
    'Symfony\Component\HttpFoundation\BinaryFileResponse' => __DIR__ . '/Symfony/Component/HttpFoundation/BinaryFileResponse.php',
    'Symfony\Component\HttpFoundation\FileBag' => __DIR__ . '/Symfony/Component/HttpFoundation/FileBag.php',
    'Symfony\Component\HttpFoundation\AcceptHeaderItem' => __DIR__ . '/Symfony/Component/HttpFoundation/AcceptHeaderItem.php',
    'Symfony\Component\HttpFoundation\Response' => __DIR__ . '/Symfony/Component/HttpFoundation/Response.php',
    'Symfony\Component\HttpFoundation\RequestMatcherInterface' => __DIR__ . '/Symfony/Component/HttpFoundation/RequestMatcherInterface.php',
    'Symfony\Component\HttpFoundation\RequestStack' => __DIR__ . '/Symfony/Component/HttpFoundation/RequestStack.php',
    'Symfony\Component\HttpFoundation\InputBag' => __DIR__ . '/Symfony/Component/HttpFoundation/InputBag.php',
    'Symfony\Component\HttpFoundation\StreamedResponse' => __DIR__ . '/Symfony/Component/HttpFoundation/StreamedResponse.php',
    'GuzzleHttp\UriTemplate' => __DIR__ . '/GuzzleHttp/UriTemplate.php',
    'GuzzleHttp\Pool' => __DIR__ . '/GuzzleHttp/Pool.php',
    'GuzzleHttp\Promise\Coroutine' => __DIR__ . '/GuzzleHttp/Promise/Coroutine.php',
    'GuzzleHttp\Promise\CancellationException' => __DIR__ . '/GuzzleHttp/Promise/CancellationException.php',
    'GuzzleHttp\Promise\RejectionException' => __DIR__ . '/GuzzleHttp/Promise/RejectionException.php',
    'GuzzleHttp\Promise\Is' => __DIR__ . '/GuzzleHttp/Promise/Is.php',
    'GuzzleHttp\Promise\PromiseInterface' => __DIR__ . '/GuzzleHttp/Promise/PromiseInterface.php',
    'GuzzleHttp\Promise\FulfilledPromise' => __DIR__ . '/GuzzleHttp/Promise/FulfilledPromise.php',
    'GuzzleHttp\Promise\PromisorInterface' => __DIR__ . '/GuzzleHttp/Promise/PromisorInterface.php',
    'GuzzleHttp\Promise\Promise' => __DIR__ . '/GuzzleHttp/Promise/Promise.php',
    'GuzzleHttp\Promise\Each' => __DIR__ . '/GuzzleHttp/Promise/Each.php',
    'GuzzleHttp\Promise\RejectedPromise' => __DIR__ . '/GuzzleHttp/Promise/RejectedPromise.php',
    'GuzzleHttp\Promise\functions' => __DIR__ . '/GuzzleHttp/Promise/functions.php',
    'GuzzleHttp\Promise\Utils' => __DIR__ . '/GuzzleHttp/Promise/Utils.php',
    'GuzzleHttp\Promise\TaskQueue' => __DIR__ . '/GuzzleHttp/Promise/TaskQueue.php',
    'GuzzleHttp\Promise\Create' => __DIR__ . '/GuzzleHttp/Promise/Create.php',
    'GuzzleHttp\Promise\TaskQueueInterface' => __DIR__ . '/GuzzleHttp/Promise/TaskQueueInterface.php',
    'GuzzleHttp\Promise\functions_include' => __DIR__ . '/GuzzleHttp/Promise/functions_include.php',
    'GuzzleHttp\Promise\AggregateException' => __DIR__ . '/GuzzleHttp/Promise/AggregateException.php',
    'GuzzleHttp\Promise\EachPromise' => __DIR__ . '/GuzzleHttp/Promise/EachPromise.php',
    'GuzzleHttp\RedirectMiddleware' => __DIR__ . '/GuzzleHttp/RedirectMiddleware.php',
    'GuzzleHttp\Cookie\CookieJar' => __DIR__ . '/GuzzleHttp/Cookie/CookieJar.php',
    'GuzzleHttp\Cookie\SessionCookieJar' => __DIR__ . '/GuzzleHttp/Cookie/SessionCookieJar.php',
    'GuzzleHttp\Cookie\FileCookieJar' => __DIR__ . '/GuzzleHttp/Cookie/FileCookieJar.php',
    'GuzzleHttp\Cookie\SetCookie' => __DIR__ . '/GuzzleHttp/Cookie/SetCookie.php',
    'GuzzleHttp\Cookie\CookieJarInterface' => __DIR__ . '/GuzzleHttp/Cookie/CookieJarInterface.php',
    'GuzzleHttp\MessageFormatter' => __DIR__ . '/GuzzleHttp/MessageFormatter.php',
    'GuzzleHttp\RequestOptions' => __DIR__ . '/GuzzleHttp/RequestOptions.php',
    'GuzzleHttp\RetryMiddleware' => __DIR__ . '/GuzzleHttp/RetryMiddleware.php',
    'GuzzleHttp\HandlerStack' => __DIR__ . '/GuzzleHttp/HandlerStack.php',
    'GuzzleHttp\Middleware' => __DIR__ . '/GuzzleHttp/Middleware.php',
    'GuzzleHttp\PrepareBodyMiddleware' => __DIR__ . '/GuzzleHttp/PrepareBodyMiddleware.php',
    'GuzzleHttp\Client' => __DIR__ . '/GuzzleHttp/Client.php',
    'GuzzleHttp\ClientInterface' => __DIR__ . '/GuzzleHttp/ClientInterface.php',
    'GuzzleHttp\Exception\ConnectException' => __DIR__ . '/GuzzleHttp/Exception/ConnectException.php',
    'GuzzleHttp\Exception\TooManyRedirectsException' => __DIR__ . '/GuzzleHttp/Exception/TooManyRedirectsException.php',
    'GuzzleHttp\Exception\TransferException' => __DIR__ . '/GuzzleHttp/Exception/TransferException.php',
    'GuzzleHttp\Exception\InvalidArgumentException' => __DIR__ . '/GuzzleHttp/Exception/InvalidArgumentException.php',
    'GuzzleHttp\Exception\SeekException' => __DIR__ . '/GuzzleHttp/Exception/SeekException.php',
    'GuzzleHttp\Exception\BadResponseException' => __DIR__ . '/GuzzleHttp/Exception/BadResponseException.php',
    'GuzzleHttp\Exception\ServerException' => __DIR__ . '/GuzzleHttp/Exception/ServerException.php',
    'GuzzleHttp\Exception\ClientException' => __DIR__ . '/GuzzleHttp/Exception/ClientException.php',
    'GuzzleHttp\Exception\GuzzleException' => __DIR__ . '/GuzzleHttp/Exception/GuzzleException.php',
    'GuzzleHttp\Exception\RequestException' => __DIR__ . '/GuzzleHttp/Exception/RequestException.php',
    'GuzzleHttp\functions' => __DIR__ . '/GuzzleHttp/functions.php',
    'GuzzleHttp\Utils' => __DIR__ . '/GuzzleHttp/Utils.php',
    'GuzzleHttp\Psr7\Rfc7230' => __DIR__ . '/GuzzleHttp/Psr7/Rfc7230.php',
    'GuzzleHttp\Psr7\Stream' => __DIR__ . '/GuzzleHttp/Psr7/Stream.php',
    'GuzzleHttp\Psr7\CachingStream' => __DIR__ . '/GuzzleHttp/Psr7/CachingStream.php',
    'GuzzleHttp\Psr7\InflateStream' => __DIR__ . '/GuzzleHttp/Psr7/InflateStream.php',
    'GuzzleHttp\Psr7\MimeType' => __DIR__ . '/GuzzleHttp/Psr7/MimeType.php',
    'GuzzleHttp\Psr7\UriNormalizer' => __DIR__ . '/GuzzleHttp/Psr7/UriNormalizer.php',
    'GuzzleHttp\Psr7\Message' => __DIR__ . '/GuzzleHttp/Psr7/Message.php',
    'GuzzleHttp\Psr7\FnStream' => __DIR__ . '/GuzzleHttp/Psr7/FnStream.php',
    'GuzzleHttp\Psr7\Request' => __DIR__ . '/GuzzleHttp/Psr7/Request.php',
    'GuzzleHttp\Psr7\Query' => __DIR__ . '/GuzzleHttp/Psr7/Query.php',
    'GuzzleHttp\Psr7\Uri' => __DIR__ . '/GuzzleHttp/Psr7/Uri.php',
    'GuzzleHttp\Psr7\LimitStream' => __DIR__ . '/GuzzleHttp/Psr7/LimitStream.php',
    'GuzzleHttp\Psr7\UploadedFile' => __DIR__ . '/GuzzleHttp/Psr7/UploadedFile.php',
    'GuzzleHttp\Psr7\ServerRequest' => __DIR__ . '/GuzzleHttp/Psr7/ServerRequest.php',
    'GuzzleHttp\Psr7\Header' => __DIR__ . '/GuzzleHttp/Psr7/Header.php',
    'GuzzleHttp\Psr7\NoSeekStream' => __DIR__ . '/GuzzleHttp/Psr7/NoSeekStream.php',
    'GuzzleHttp\Psr7\BufferStream' => __DIR__ . '/GuzzleHttp/Psr7/BufferStream.php',
    'GuzzleHttp\Psr7\functions' => __DIR__ . '/GuzzleHttp/Psr7/functions.php',
    'GuzzleHttp\Psr7\MultipartStream' => __DIR__ . '/GuzzleHttp/Psr7/MultipartStream.php',
    'GuzzleHttp\Psr7\UriResolver' => __DIR__ . '/GuzzleHttp/Psr7/UriResolver.php',
    'GuzzleHttp\Psr7\Utils' => __DIR__ . '/GuzzleHttp/Psr7/Utils.php',
    'GuzzleHttp\Psr7\Response' => __DIR__ . '/GuzzleHttp/Psr7/Response.php',
    'GuzzleHttp\Psr7\AppendStream' => __DIR__ . '/GuzzleHttp/Psr7/AppendStream.php',
    'GuzzleHttp\Psr7\PumpStream' => __DIR__ . '/GuzzleHttp/Psr7/PumpStream.php',
    'GuzzleHttp\Psr7\MessageTrait' => __DIR__ . '/GuzzleHttp/Psr7/MessageTrait.php',
    'GuzzleHttp\Psr7\functions_include' => __DIR__ . '/GuzzleHttp/Psr7/functions_include.php',
    'GuzzleHttp\Psr7\StreamWrapper' => __DIR__ . '/GuzzleHttp/Psr7/StreamWrapper.php',
    'GuzzleHttp\Psr7\LazyOpenStream' => __DIR__ . '/GuzzleHttp/Psr7/LazyOpenStream.php',
    'GuzzleHttp\Psr7\StreamDecoratorTrait' => __DIR__ . '/GuzzleHttp/Psr7/StreamDecoratorTrait.php',
    'GuzzleHttp\Psr7\DroppingStream' => __DIR__ . '/GuzzleHttp/Psr7/DroppingStream.php',
    'GuzzleHttp\TransferStats' => __DIR__ . '/GuzzleHttp/TransferStats.php',
    'GuzzleHttp\functions_include' => __DIR__ . '/GuzzleHttp/functions_include.php',
    'GuzzleHttp\Handler\MockHandler' => __DIR__ . '/GuzzleHttp/Handler/MockHandler.php',
    'GuzzleHttp\Handler\EasyHandle' => __DIR__ . '/GuzzleHttp/Handler/EasyHandle.php',
    'GuzzleHttp\Handler\CurlMultiHandler' => __DIR__ . '/GuzzleHttp/Handler/CurlMultiHandler.php',
    'GuzzleHttp\Handler\StreamHandler' => __DIR__ . '/GuzzleHttp/Handler/StreamHandler.php',
    'GuzzleHttp\Handler\CurlFactory' => __DIR__ . '/GuzzleHttp/Handler/CurlFactory.php',
    'GuzzleHttp\Handler\CurlFactoryInterface' => __DIR__ . '/GuzzleHttp/Handler/CurlFactoryInterface.php',
    'GuzzleHttp\Handler\CurlHandler' => __DIR__ . '/GuzzleHttp/Handler/CurlHandler.php',
    'GuzzleHttp\Handler\Proxy' => __DIR__ . '/GuzzleHttp/Handler/Proxy.php',
);

spl_autoload_register(function ($class) use ($mapping) {
    if (isset($mapping[$class])) {
        require $mapping[$class];
    }
}, true);

require __DIR__ . '/GuzzleHttp/functions_include.php';
require __DIR__ . '/GuzzleHttp/Promise/functions_include.php';
require __DIR__ . '/GuzzleHttp/Psr7/functions_include.php';
