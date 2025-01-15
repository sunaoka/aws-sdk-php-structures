<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutProfileObjectType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $ObjectTypeName
 * @property string $Description
 * @property string|null $TemplateId
 * @property int<1, 1098>|null $ExpirationDays
 * @property string|null $EncryptionKey
 * @property bool|null $AllowProfileCreation
 * @property string|null $SourceLastUpdatedTimestampFormat
 * @property int<1, max>|null $MaxProfileObjectCount
 * @property array<string, Shapes\ObjectTypeField>|null $Fields
 * @property array<string, list<Shapes\ObjectTypeKey>>|null $Keys
 * @property array<string, string>|null $Tags
 */
class PutProfileObjectTypeRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ObjectTypeName: string,
     *     Description: string,
     *     TemplateId?: string|null,
     *     ExpirationDays?: int<1, 1098>|null,
     *     EncryptionKey?: string|null,
     *     AllowProfileCreation?: bool|null,
     *     SourceLastUpdatedTimestampFormat?: string|null,
     *     MaxProfileObjectCount?: int<1, max>|null,
     *     Fields?: array<string, Shapes\ObjectTypeField>|null,
     *     Keys?: array<string, list<Shapes\ObjectTypeKey>>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
