<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetIpAccessSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $additionalEncryptionContext
 * @property list<string> $associatedPortalArns
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property string $customerManagedKey
 * @property string $description
 * @property string $displayName
 * @property string $ipAccessSettingsArn
 * @property list<IpRule> $ipRules
 */
class IpAccessSettings extends Shape
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>,
     *     associatedPortalArns?: list<string>,
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     customerManagedKey?: string,
     *     description?: string,
     *     displayName?: string,
     *     ipAccessSettingsArn: string,
     *     ipRules?: list<IpRule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
