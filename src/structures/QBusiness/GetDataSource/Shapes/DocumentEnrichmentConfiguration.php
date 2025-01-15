<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InlineDocumentEnrichmentConfiguration>|null $inlineConfigurations
 * @property HookConfiguration|null $preExtractionHookConfiguration
 * @property HookConfiguration|null $postExtractionHookConfiguration
 */
class DocumentEnrichmentConfiguration extends Shape
{
    /**
     * @param array{
     *     inlineConfigurations?: list<InlineDocumentEnrichmentConfiguration>|null,
     *     preExtractionHookConfiguration?: HookConfiguration|null,
     *     postExtractionHookConfiguration?: HookConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
