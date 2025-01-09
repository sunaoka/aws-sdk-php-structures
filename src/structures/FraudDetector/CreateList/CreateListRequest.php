<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<string> $elements
 * @property string $variableType
 * @property string $description
 * @property list<Shapes\Tag> $tags
 */
class CreateListRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     elements?: list<string>,
     *     variableType?: string,
     *     description?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
