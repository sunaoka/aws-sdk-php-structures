<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\CreateCodeReview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $RepositoryAssociationArn
 * @property Shapes\CodeReviewType $Type
 * @property string $ClientRequestToken
 */
class CreateCodeReviewRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     RepositoryAssociationArn: string,
     *     Type: Shapes\CodeReviewType,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
