<?php

namespace Sunaoka\Aws\Structures\Athena\CreateNotebook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkGroup
 * @property string $Name
 * @property string $ClientRequestToken
 */
class CreateNotebookRequest extends Request
{
    /**
     * @param array{
     *     WorkGroup: string,
     *     Name: string,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
