<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateKnowledgeBase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $KnowledgeBaseId
 * @property string $Name
 * @property string $DataSourceArn
 * @property Shapes\KnowledgeBaseConfiguration $KnowledgeBaseConfiguration
 * @property string|null $Description
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property Shapes\MediaExtractionConfiguration|null $MediaExtractionConfiguration
 * @property Shapes\AccessControlConfiguration|null $AccessControlConfiguration
 * @property string|null $PrimaryOwnerArn
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateKnowledgeBaseRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     KnowledgeBaseId: string,
     *     Name: string,
     *     DataSourceArn: string,
     *     KnowledgeBaseConfiguration: Shapes\KnowledgeBaseConfiguration,
     *     Description?: string|null,
     *     Permissions?: list<Shapes\ResourcePermission>|null,
     *     MediaExtractionConfiguration?: Shapes\MediaExtractionConfiguration|null,
     *     AccessControlConfiguration?: Shapes\AccessControlConfiguration|null,
     *     PrimaryOwnerArn?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
