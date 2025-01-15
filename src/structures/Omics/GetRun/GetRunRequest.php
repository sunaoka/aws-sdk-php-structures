<?php

namespace Sunaoka\Aws\Structures\Omics\GetRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property list<'DEFINITION'>|null $export
 */
class GetRunRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     export?: list<'DEFINITION'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
