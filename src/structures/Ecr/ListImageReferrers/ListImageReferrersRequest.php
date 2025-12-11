<?php

namespace Sunaoka\Aws\Structures\Ecr\ListImageReferrers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 * @property Shapes\SubjectIdentifier $subjectId
 * @property Shapes\ListImageReferrersFilter|null $filter
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListImageReferrersRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName: string,
     *     subjectId: Shapes\SubjectIdentifier,
     *     filter?: Shapes\ListImageReferrersFilter|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
