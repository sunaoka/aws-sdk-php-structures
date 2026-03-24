<?php

namespace Sunaoka\Aws\Structures\Omics\StartRunBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InlineSetting>|null $inlineSettings
 * @property string|null $s3UriSettings
 */
class BatchRunSettings extends Shape
{
    /**
     * @param array{
     *     inlineSettings?: list<InlineSetting>|null,
     *     s3UriSettings?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
