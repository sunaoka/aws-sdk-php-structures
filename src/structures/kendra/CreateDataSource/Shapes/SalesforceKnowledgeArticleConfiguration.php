<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'DRAFT'|'PUBLISHED'|'ARCHIVED'> $IncludedStates
 * @property SalesforceStandardKnowledgeArticleTypeConfiguration|null $StandardKnowledgeArticleTypeConfiguration
 * @property list<SalesforceCustomKnowledgeArticleTypeConfiguration>|null $CustomKnowledgeArticleTypeConfigurations
 */
class SalesforceKnowledgeArticleConfiguration extends Shape
{
    /**
     * @param array{
     *     IncludedStates: list<'DRAFT'|'PUBLISHED'|'ARCHIVED'>,
     *     StandardKnowledgeArticleTypeConfiguration?: SalesforceStandardKnowledgeArticleTypeConfiguration|null,
     *     CustomKnowledgeArticleTypeConfigurations?: list<SalesforceCustomKnowledgeArticleTypeConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
