<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentName
 * @property string|null $DocumentVersion
 */
class TemplateSSMDocumentDetails extends Shape
{
    /**
     * @param array{
     *     DocumentName: string,
     *     DocumentVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
