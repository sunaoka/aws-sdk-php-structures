<?php

namespace Sunaoka\Aws\Structures\FraudDetector\PutLabel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property list<Shapes\Tag> $tags
 */
class PutLabelRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
