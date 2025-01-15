<?php

namespace Sunaoka\Aws\Structures\kendra\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InlineCustomDocumentEnrichmentConfiguration>|null $InlineConfigurations
 * @property HookConfiguration|null $PreExtractionHookConfiguration
 * @property HookConfiguration|null $PostExtractionHookConfiguration
 * @property string|null $RoleArn
 */
class CustomDocumentEnrichmentConfiguration extends Shape
{
    /**
     * @param array{
     *     InlineConfigurations?: list<InlineCustomDocumentEnrichmentConfiguration>|null,
     *     PreExtractionHookConfiguration?: HookConfiguration|null,
     *     PostExtractionHookConfiguration?: HookConfiguration|null,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
