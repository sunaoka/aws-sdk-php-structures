<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribePublisher;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $PublisherId
 * @property 'VERIFIED'|'UNVERIFIED' $PublisherStatus
 * @property 'AWS_Marketplace'|'GitHub'|'Bitbucket' $IdentityProvider
 * @property string $PublisherProfile
 */
class DescribePublisherResponse extends Response
{
}
