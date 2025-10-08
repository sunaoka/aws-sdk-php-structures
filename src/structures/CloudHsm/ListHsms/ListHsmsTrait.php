<?php

namespace Sunaoka\Aws\Structures\CloudHsm\ListHsms;

trait ListHsmsTrait
{
    /**
     * @param ListHsmsRequest $args
     * @return ListHsmsResponse
     */
    public function listHsms(ListHsmsRequest $args)
    {
        $result = parent::listHsms($args->toArray());
        return new ListHsmsResponse($result->toArray());
    }
}
