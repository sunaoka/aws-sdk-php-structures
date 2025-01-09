<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConformancePack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentName
 * @property string $DocumentVersion
 */
class TemplateSSMDocumentDetails extends Shape
{
    /**
     * @param array{
     *     DocumentName: string,
     *     DocumentVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
