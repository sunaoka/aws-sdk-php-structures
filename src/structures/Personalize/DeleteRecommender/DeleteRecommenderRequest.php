<?php

namespace Sunaoka\Aws\Structures\Personalize\DeleteRecommender;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recommenderArn
 */
class DeleteRecommenderRequest extends Request
{
    /**
     * @param array{recommenderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
