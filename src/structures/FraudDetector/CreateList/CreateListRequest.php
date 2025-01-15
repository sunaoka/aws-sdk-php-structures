<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<string>|null $elements
 * @property string|null $variableType
 * @property string|null $description
 * @property list<Shapes\Tag>|null $tags
 */
class CreateListRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     elements?: list<string>|null,
     *     variableType?: string|null,
     *     description?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
