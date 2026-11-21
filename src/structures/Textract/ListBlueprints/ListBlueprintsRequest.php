<?php

namespace Sunaoka\Aws\Structures\Textract\ListBlueprints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $BlueprintArn
 * @property Shapes\ProjectFilter|null $ProjectFilter
 * @property 'ACCOUNT'|'SERVICE'|null $ResourceOwner
 */
class ListBlueprintsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, max>|null,
     *     NextToken?: string|null,
     *     BlueprintArn?: string|null,
     *     ProjectFilter?: Shapes\ProjectFilter|null,
     *     ResourceOwner?: 'ACCOUNT'|'SERVICE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
