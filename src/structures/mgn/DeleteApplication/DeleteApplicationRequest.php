<?php

namespace Sunaoka\Aws\Structures\mgn\DeleteApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property string $applicationID
 */
class DeleteApplicationRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     applicationID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
