<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateServiceLinkedAnalyzer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ACCOUNT'|'ORGANIZATION'|'ACCOUNT_UNUSED_ACCESS'|'ORGANIZATION_UNUSED_ACCESS'|'ACCOUNT_INTERNAL_ACCESS'|'ORGANIZATION_INTERNAL_ACCESS' $type
 * @property list<Shapes\InlineArchiveRule>|null $archiveRules
 * @property string|null $clientToken
 * @property Shapes\AnalyzerConfiguration|null $configuration
 */
class CreateServiceLinkedAnalyzerRequest extends Request
{
    /**
     * @param array{
     *     type: 'ACCOUNT'|'ORGANIZATION'|'ACCOUNT_UNUSED_ACCESS'|'ORGANIZATION_UNUSED_ACCESS'|'ACCOUNT_INTERNAL_ACCESS'|'ORGANIZATION_INTERNAL_ACCESS',
     *     archiveRules?: list<Shapes\InlineArchiveRule>|null,
     *     clientToken?: string|null,
     *     configuration?: Shapes\AnalyzerConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
