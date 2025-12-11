<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutDomainObjectType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $ObjectTypeName
 * @property string|null $Description
 * @property string|null $EncryptionKey
 * @property array<string, Shapes\DomainObjectTypeField> $Fields
 * @property array<string, string>|null $Tags
 */
class PutDomainObjectTypeRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ObjectTypeName: string,
     *     Description?: string|null,
     *     EncryptionKey?: string|null,
     *     Fields: array<string, Shapes\DomainObjectTypeField>,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
