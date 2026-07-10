<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateKnowledgeBase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $KnowledgeBaseId
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\KnowledgeBaseConfiguration|null $KnowledgeBaseConfiguration
 * @property Shapes\MediaExtractionConfiguration|null $MediaExtractionConfiguration
 * @property bool|null $IsEmailNotificationOptedForIngestionFailures
 * @property Shapes\AccessControlConfiguration|null $AccessControlConfiguration
 */
class UpdateKnowledgeBaseRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     KnowledgeBaseId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     KnowledgeBaseConfiguration?: Shapes\KnowledgeBaseConfiguration|null,
     *     MediaExtractionConfiguration?: Shapes\MediaExtractionConfiguration|null,
     *     IsEmailNotificationOptedForIngestionFailures?: bool|null,
     *     AccessControlConfiguration?: Shapes\AccessControlConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
