<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteApplicationStatusCheck;

trait DeleteApplicationStatusCheckTrait
{
    /**
     * @param DeleteApplicationStatusCheckRequest $args
     * @return DeleteApplicationStatusCheckResponse
     */
    public function deleteApplicationStatusCheck(DeleteApplicationStatusCheckRequest $args)
    {
        $result = parent::deleteApplicationStatusCheck($args->toArray());
        return new DeleteApplicationStatusCheckResponse($result->toArray());
    }
}
