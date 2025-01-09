<?php

namespace Sunaoka\Aws\Structures\Personalize\StartRecommender;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recommenderArn
 */
class StartRecommenderRequest extends Request
{
    /**
     * @param array{recommenderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
