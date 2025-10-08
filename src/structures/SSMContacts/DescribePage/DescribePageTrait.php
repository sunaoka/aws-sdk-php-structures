<?php

namespace Sunaoka\Aws\Structures\SSMContacts\DescribePage;

trait DescribePageTrait
{
    /**
     * @param DescribePageRequest $args
     * @return DescribePageResponse
     */
    public function describePage(DescribePageRequest $args)
    {
        $result = parent::describePage($args->toArray());
        return new DescribePageResponse($result->toArray());
    }
}
