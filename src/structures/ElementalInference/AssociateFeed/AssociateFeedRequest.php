<?php

namespace Sunaoka\Aws\Structures\ElementalInference\AssociateFeed;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $associatedResourceName
 * @property list<Shapes\CreateOutput> $outputs
 * @property bool|null $dryRun
 */
class AssociateFeedRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     associatedResourceName: string,
     *     outputs: list<Shapes\CreateOutput>,
     *     dryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
