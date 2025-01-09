<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'DRAFT'|'PUBLISHED'|'ARCHIVED'> $IncludedStates
 * @property SalesforceStandardKnowledgeArticleTypeConfiguration $StandardKnowledgeArticleTypeConfiguration
 * @property list<SalesforceCustomKnowledgeArticleTypeConfiguration> $CustomKnowledgeArticleTypeConfigurations
 */
class SalesforceKnowledgeArticleConfiguration extends Shape
{
    /**
     * @param array{
     *     IncludedStates: list<'DRAFT'|'PUBLISHED'|'ARCHIVED'>,
     *     StandardKnowledgeArticleTypeConfiguration?: SalesforceStandardKnowledgeArticleTypeConfiguration,
     *     CustomKnowledgeArticleTypeConfigurations?: list<SalesforceCustomKnowledgeArticleTypeConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
