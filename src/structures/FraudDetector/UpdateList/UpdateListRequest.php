<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<string> $elements
 * @property string $description
 * @property 'REPLACE'|'APPEND'|'REMOVE' $updateMode
 * @property string $variableType
 */
class UpdateListRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     elements?: list<string>,
     *     description?: string,
     *     updateMode?: 'REPLACE'|'APPEND'|'REMOVE',
     *     variableType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
