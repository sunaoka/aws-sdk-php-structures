<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateIpAccessSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $additionalEncryptionContext
 * @property list<string>|null $associatedPortalArns
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property string|null $customerManagedKey
 * @property string|null $description
 * @property string|null $displayName
 * @property string $ipAccessSettingsArn
 * @property list<IpRule>|null $ipRules
 */
class IpAccessSettings extends Shape
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>|null,
     *     associatedPortalArns?: list<string>|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     customerManagedKey?: string|null,
     *     description?: string|null,
     *     displayName?: string|null,
     *     ipAccessSettingsArn: string,
     *     ipRules?: list<IpRule>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
