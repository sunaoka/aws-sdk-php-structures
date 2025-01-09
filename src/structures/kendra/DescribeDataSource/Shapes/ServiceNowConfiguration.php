<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HostUrl
 * @property string $SecretArn
 * @property 'LONDON'|'OTHERS' $ServiceNowBuildVersion
 * @property ServiceNowKnowledgeArticleConfiguration $KnowledgeArticleConfiguration
 * @property ServiceNowServiceCatalogConfiguration $ServiceCatalogConfiguration
 * @property 'HTTP_BASIC'|'OAUTH2' $AuthenticationType
 */
class ServiceNowConfiguration extends Shape
{
    /**
     * @param array{
     *     HostUrl: string,
     *     SecretArn: string,
     *     ServiceNowBuildVersion: 'LONDON'|'OTHERS',
     *     KnowledgeArticleConfiguration?: ServiceNowKnowledgeArticleConfiguration,
     *     ServiceCatalogConfiguration?: ServiceNowServiceCatalogConfiguration,
     *     AuthenticationType?: 'HTTP_BASIC'|'OAUTH2'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
