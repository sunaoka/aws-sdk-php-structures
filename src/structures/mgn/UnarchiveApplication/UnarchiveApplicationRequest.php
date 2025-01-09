<?php

namespace Sunaoka\Aws\Structures\mgn\UnarchiveApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property string $applicationID
 */
class UnarchiveApplicationRequest extends Request
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
