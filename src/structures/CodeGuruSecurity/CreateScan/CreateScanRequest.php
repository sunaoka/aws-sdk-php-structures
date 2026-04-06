<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\CreateScan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\ResourceId $resourceId
 * @property string $scanName
 * @property 'Standard'|'Express'|null $scanType
 * @property 'Security'|'All'|null $analysisType
 * @property array<string, string>|null $tags
 */
class CreateScanRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     resourceId: Shapes\ResourceId,
     *     scanName: string,
     *     scanType?: 'Standard'|'Express'|null,
     *     analysisType?: 'Security'|'All'|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
