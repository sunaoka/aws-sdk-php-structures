<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string $id
 */
class DeleteApplicationRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
