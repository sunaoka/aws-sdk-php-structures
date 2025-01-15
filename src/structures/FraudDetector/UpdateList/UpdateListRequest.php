<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<string>|null $elements
 * @property string|null $description
 * @property 'REPLACE'|'APPEND'|'REMOVE'|null $updateMode
 * @property string|null $variableType
 */
class UpdateListRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     elements?: list<string>|null,
     *     description?: string|null,
     *     updateMode?: 'REPLACE'|'APPEND'|'REMOVE'|null,
     *     variableType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
