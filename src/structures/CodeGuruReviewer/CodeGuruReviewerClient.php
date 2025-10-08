<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer;

class CodeGuruReviewerClient extends \Aws\CodeGuruReviewer\CodeGuruReviewerClient
{
    use AssociateRepository\AssociateRepositoryTrait;
    use CreateCodeReview\CreateCodeReviewTrait;
    use DescribeCodeReview\DescribeCodeReviewTrait;
    use DescribeRecommendationFeedback\DescribeRecommendationFeedbackTrait;
    use DescribeRepositoryAssociation\DescribeRepositoryAssociationTrait;
    use DisassociateRepository\DisassociateRepositoryTrait;
    use ListCodeReviews\ListCodeReviewsTrait;
    use ListRecommendationFeedback\ListRecommendationFeedbackTrait;
    use ListRecommendations\ListRecommendationsTrait;
    use ListRepositoryAssociations\ListRepositoryAssociationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutRecommendationFeedback\PutRecommendationFeedbackTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
