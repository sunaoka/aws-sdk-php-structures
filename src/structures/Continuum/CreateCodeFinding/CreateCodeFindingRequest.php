<?php

namespace Sunaoka\Aws\Structures\Continuum\CreateCodeFinding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property Shapes\Document $ocsfDocument
 * @property string|null $clientToken
 */
class CreateCodeFindingRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     ocsfDocument: Shapes\Document,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
