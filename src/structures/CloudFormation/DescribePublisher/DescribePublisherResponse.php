<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribePublisher;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $PublisherId
 * @property 'VERIFIED'|'UNVERIFIED'|null $PublisherStatus
 * @property 'AWS_Marketplace'|'GitHub'|'Bitbucket'|null $IdentityProvider
 * @property string|null $PublisherProfile
 */
class DescribePublisherResponse extends Response
{
}
