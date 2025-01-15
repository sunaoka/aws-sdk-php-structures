<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateDocumentDefaultVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $DefaultVersion
 * @property string|null $DefaultVersionName
 */
class DocumentDefaultVersionDescription extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     DefaultVersion?: string|null,
     *     DefaultVersionName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
