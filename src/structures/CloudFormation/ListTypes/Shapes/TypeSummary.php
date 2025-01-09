<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESOURCE'|'MODULE'|'HOOK' $Type
 * @property string $TypeName
 * @property string $DefaultVersionId
 * @property string $TypeArn
 * @property \Aws\Api\DateTimeResult $LastUpdated
 * @property string $Description
 * @property string $PublisherId
 * @property string $OriginalTypeName
 * @property string $PublicVersionNumber
 * @property string $LatestPublicVersion
 * @property 'AWS_Marketplace'|'GitHub'|'Bitbucket' $PublisherIdentity
 * @property string $PublisherName
 * @property bool $IsActivated
 */
class TypeSummary extends Shape
{
    /**
     * @param array{
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK',
     *     TypeName?: string,
     *     DefaultVersionId?: string,
     *     TypeArn?: string,
     *     LastUpdated?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     PublisherId?: string,
     *     OriginalTypeName?: string,
     *     PublicVersionNumber?: string,
     *     LatestPublicVersion?: string,
     *     PublisherIdentity?: 'AWS_Marketplace'|'GitHub'|'Bitbucket',
     *     PublisherName?: string,
     *     IsActivated?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
