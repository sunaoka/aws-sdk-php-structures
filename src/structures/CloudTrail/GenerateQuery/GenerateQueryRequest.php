<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GenerateQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $EventDataStores
 * @property string $Prompt
 */
class GenerateQueryRequest extends Request
{
    /**
     * @param array{
     *     EventDataStores: list<string>,
     *     Prompt: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
