<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceArn
 * @property string|null $TargetArn
 * @property string|null $IntegrationName
 * @property string|null $IntegrationArn
 * @property string|null $KMSKeyId
 * @property array<string, string>|null $AdditionalEncryptionContext
 * @property 'creating'|'active'|'modifying'|'failed'|'deleting'|'syncing'|'needs_attention'|null $Status
 * @property list<Tag>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property list<IntegrationError>|null $Errors
 * @property string|null $DataFilter
 * @property string|null $Description
 */
class Integration extends Shape
{
    /**
     * @param array{
     *     SourceArn?: string|null,
     *     TargetArn?: string|null,
     *     IntegrationName?: string|null,
     *     IntegrationArn?: string|null,
     *     KMSKeyId?: string|null,
     *     AdditionalEncryptionContext?: array<string, string>|null,
     *     Status?: 'creating'|'active'|'modifying'|'failed'|'deleting'|'syncing'|'needs_attention'|null,
     *     Tags?: list<Tag>|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     Errors?: list<IntegrationError>|null,
     *     DataFilter?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
