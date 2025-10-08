<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact;

trait DescribeContactTrait
{
    /**
     * @param DescribeContactRequest $args
     * @return DescribeContactResponse
     */
    public function describeContact(DescribeContactRequest $args)
    {
        $result = parent::describeContact($args->toArray());
        return new DescribeContactResponse($result->toArray());
    }
}
