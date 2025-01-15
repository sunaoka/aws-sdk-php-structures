<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServerUrl
 * @property string $SecretArn
 * @property list<SalesforceStandardObjectConfiguration>|null $StandardObjectConfigurations
 * @property SalesforceKnowledgeArticleConfiguration|null $KnowledgeArticleConfiguration
 * @property SalesforceChatterFeedConfiguration|null $ChatterFeedConfiguration
 * @property bool|null $CrawlAttachments
 * @property SalesforceStandardObjectAttachmentConfiguration|null $StandardObjectAttachmentConfiguration
 * @property list<string>|null $IncludeAttachmentFilePatterns
 * @property list<string>|null $ExcludeAttachmentFilePatterns
 */
class SalesforceConfiguration extends Shape
{
    /**
     * @param array{
     *     ServerUrl: string,
     *     SecretArn: string,
     *     StandardObjectConfigurations?: list<SalesforceStandardObjectConfiguration>|null,
     *     KnowledgeArticleConfiguration?: SalesforceKnowledgeArticleConfiguration|null,
     *     ChatterFeedConfiguration?: SalesforceChatterFeedConfiguration|null,
     *     CrawlAttachments?: bool|null,
     *     StandardObjectAttachmentConfiguration?: SalesforceStandardObjectAttachmentConfiguration|null,
     *     IncludeAttachmentFilePatterns?: list<string>|null,
     *     ExcludeAttachmentFilePatterns?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
