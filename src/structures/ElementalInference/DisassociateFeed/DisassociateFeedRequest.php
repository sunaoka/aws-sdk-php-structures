<?php

namespace Sunaoka\Aws\Structures\ElementalInference\DisassociateFeed;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $associatedResourceName
 * @property bool|null $dryRun
 */
class DisassociateFeedRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     associatedResourceName: string,
     *     dryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
