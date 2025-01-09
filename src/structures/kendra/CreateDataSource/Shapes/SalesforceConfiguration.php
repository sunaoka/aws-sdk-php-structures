<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServerUrl
 * @property string $SecretArn
 * @property list<SalesforceStandardObjectConfiguration> $StandardObjectConfigurations
 * @property SalesforceKnowledgeArticleConfiguration $KnowledgeArticleConfiguration
 * @property SalesforceChatterFeedConfiguration $ChatterFeedConfiguration
 * @property bool $CrawlAttachments
 * @property SalesforceStandardObjectAttachmentConfiguration $StandardObjectAttachmentConfiguration
 * @property list<string> $IncludeAttachmentFilePatterns
 * @property list<string> $ExcludeAttachmentFilePatterns
 */
class SalesforceConfiguration extends Shape
{
    /**
     * @param array{
     *     ServerUrl: string,
     *     SecretArn: string,
     *     StandardObjectConfigurations?: list<SalesforceStandardObjectConfiguration>,
     *     KnowledgeArticleConfiguration?: SalesforceKnowledgeArticleConfiguration,
     *     ChatterFeedConfiguration?: SalesforceChatterFeedConfiguration,
     *     CrawlAttachments?: bool,
     *     StandardObjectAttachmentConfiguration?: SalesforceStandardObjectAttachmentConfiguration,
     *     IncludeAttachmentFilePatterns?: list<string>,
     *     ExcludeAttachmentFilePatterns?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
