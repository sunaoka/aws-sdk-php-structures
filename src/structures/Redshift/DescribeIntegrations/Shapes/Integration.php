<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IntegrationArn
 * @property string|null $IntegrationName
 * @property string|null $SourceArn
 * @property string|null $TargetArn
 * @property 'creating'|'active'|'modifying'|'failed'|'deleting'|'syncing'|'needs_attention'|null $Status
 * @property list<IntegrationError>|null $Errors
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property string|null $Description
 * @property string|null $KMSKeyId
 * @property array<string, string>|null $AdditionalEncryptionContext
 * @property list<Tag>|null $Tags
 */
class Integration extends Shape
{
    /**
     * @param array{
     *     IntegrationArn?: string|null,
     *     IntegrationName?: string|null,
     *     SourceArn?: string|null,
     *     TargetArn?: string|null,
     *     Status?: 'creating'|'active'|'modifying'|'failed'|'deleting'|'syncing'|'needs_attention'|null,
     *     Errors?: list<IntegrationError>|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     KMSKeyId?: string|null,
     *     AdditionalEncryptionContext?: array<string, string>|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
