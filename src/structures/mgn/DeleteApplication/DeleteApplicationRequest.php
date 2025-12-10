<?php

namespace Sunaoka\Aws\Structures\mgn\DeleteApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationID
 * @property string|null $accountID
 */
class DeleteApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationID: string,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
