<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\CreateCodeReview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $RepositoryAssociationArn
 * @property Shapes\CodeReviewType $Type
 * @property string|null $ClientRequestToken
 */
class CreateCodeReviewRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     RepositoryAssociationArn: string,
     *     Type: Shapes\CodeReviewType,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
