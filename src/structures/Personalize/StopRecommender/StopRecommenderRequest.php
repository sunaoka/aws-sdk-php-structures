<?php

namespace Sunaoka\Aws\Structures\Personalize\StopRecommender;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recommenderArn
 */
class StopRecommenderRequest extends Request
{
    /**
     * @param array{recommenderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
