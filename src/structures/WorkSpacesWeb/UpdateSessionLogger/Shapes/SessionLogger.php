<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateSessionLogger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionLoggerArn
 * @property EventFilter|null $eventFilter
 * @property LogConfiguration|null $logConfiguration
 * @property string|null $customerManagedKey
 * @property array<string, string>|null $additionalEncryptionContext
 * @property list<string>|null $associatedPortalArns
 * @property string|null $displayName
 * @property \Aws\Api\DateTimeResult|null $creationDate
 */
class SessionLogger extends Shape
{
    /**
     * @param array{
     *     sessionLoggerArn: string,
     *     eventFilter?: EventFilter|null,
     *     logConfiguration?: LogConfiguration|null,
     *     customerManagedKey?: string|null,
     *     additionalEncryptionContext?: array<string, string>|null,
     *     associatedPortalArns?: list<string>|null,
     *     displayName?: string|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
