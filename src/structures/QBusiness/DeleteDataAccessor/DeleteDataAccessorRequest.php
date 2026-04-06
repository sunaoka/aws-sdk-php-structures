<?php

namespace Sunaoka\Aws\Structures\QBusiness\DeleteDataAccessor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $dataAccessorId
 */
class DeleteDataAccessorRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     dataAccessorId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
