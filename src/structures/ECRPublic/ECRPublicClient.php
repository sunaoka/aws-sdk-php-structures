<?php

namespace Sunaoka\Aws\Structures\ECRPublic;

class ECRPublicClient extends \Aws\ECRPublic\ECRPublicClient
{
    use BatchCheckLayerAvailability\BatchCheckLayerAvailabilityTrait;
    use BatchDeleteImage\BatchDeleteImageTrait;
    use CompleteLayerUpload\CompleteLayerUploadTrait;
    use CreateRepository\CreateRepositoryTrait;
    use DeleteRepository\DeleteRepositoryTrait;
    use DeleteRepositoryPolicy\DeleteRepositoryPolicyTrait;
    use DescribeImageTags\DescribeImageTagsTrait;
    use DescribeImages\DescribeImagesTrait;
    use DescribeRegistries\DescribeRegistriesTrait;
    use DescribeRepositories\DescribeRepositoriesTrait;
    use GetAuthorizationToken\GetAuthorizationTokenTrait;
    use GetRegistryCatalogData\GetRegistryCatalogDataTrait;
    use GetRepositoryCatalogData\GetRepositoryCatalogDataTrait;
    use GetRepositoryPolicy\GetRepositoryPolicyTrait;
    use InitiateLayerUpload\InitiateLayerUploadTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutImage\PutImageTrait;
    use PutRegistryCatalogData\PutRegistryCatalogDataTrait;
    use PutRepositoryCatalogData\PutRepositoryCatalogDataTrait;
    use SetRepositoryPolicy\SetRepositoryPolicyTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UploadLayerPart\UploadLayerPartTrait;
}
