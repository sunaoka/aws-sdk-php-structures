<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateIpAccessSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ipAccessSettingsArn
 * @property list<string>|null $associatedPortalArns
 * @property list<IpRule>|null $ipRules
 * @property string|null $displayName
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property string|null $customerManagedKey
 * @property array<string, string>|null $additionalEncryptionContext
 */
class IpAccessSettings extends Shape
{
    /**
     * @param array{
     *     ipAccessSettingsArn: string,
     *     associatedPortalArns?: list<string>|null,
     *     ipRules?: list<IpRule>|null,
     *     displayName?: string|null,
     *     description?: string|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     customerManagedKey?: string|null,
     *     additionalEncryptionContext?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
