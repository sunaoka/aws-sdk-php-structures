<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutProfileObjectType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $ObjectTypeName
 * @property string $Description
 * @property string $TemplateId
 * @property int<1, 1098> $ExpirationDays
 * @property string $EncryptionKey
 * @property bool $AllowProfileCreation
 * @property string $SourceLastUpdatedTimestampFormat
 * @property int<1, max> $MaxProfileObjectCount
 * @property array<string, Shapes\ObjectTypeField> $Fields
 * @property array<string, list<Shapes\ObjectTypeKey>> $Keys
 * @property array<string, string> $Tags
 */
class PutProfileObjectTypeRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ObjectTypeName: string,
     *     Description: string,
     *     TemplateId?: string,
     *     ExpirationDays?: int<1, 1098>,
     *     EncryptionKey?: string,
     *     AllowProfileCreation?: bool,
     *     SourceLastUpdatedTimestampFormat?: string,
     *     MaxProfileObjectCount?: int<1, max>,
     *     Fields?: array<string, Shapes\ObjectTypeField>,
     *     Keys?: array<string, list<Shapes\ObjectTypeKey>>,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
