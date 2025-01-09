<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateDocumentDefaultVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $DefaultVersion
 * @property string $DefaultVersionName
 */
class DocumentDefaultVersionDescription extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     DefaultVersion?: string,
     *     DefaultVersionName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
