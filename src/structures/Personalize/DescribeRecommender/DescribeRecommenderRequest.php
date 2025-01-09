<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeRecommender;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recommenderArn
 */
class DescribeRecommenderRequest extends Request
{
    /**
     * @param array{recommenderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
