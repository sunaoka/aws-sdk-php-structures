<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESOURCE'|'MODULE'|'HOOK'|null $Type
 * @property string|null $TypeName
 * @property string|null $DefaultVersionId
 * @property string|null $TypeArn
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property string|null $Description
 * @property string|null $PublisherId
 * @property string|null $OriginalTypeName
 * @property string|null $PublicVersionNumber
 * @property string|null $LatestPublicVersion
 * @property 'AWS_Marketplace'|'GitHub'|'Bitbucket'|null $PublisherIdentity
 * @property string|null $PublisherName
 * @property bool|null $IsActivated
 */
class TypeSummary extends Shape
{
    /**
     * @param array{
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK'|null,
     *     TypeName?: string|null,
     *     DefaultVersionId?: string|null,
     *     TypeArn?: string|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     PublisherId?: string|null,
     *     OriginalTypeName?: string|null,
     *     PublicVersionNumber?: string|null,
     *     LatestPublicVersion?: string|null,
     *     PublisherIdentity?: 'AWS_Marketplace'|'GitHub'|'Bitbucket'|null,
     *     PublisherName?: string|null,
     *     IsActivated?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
