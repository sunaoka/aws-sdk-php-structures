<?php

namespace Sunaoka\Aws\Structures\MPA\GetResourcePolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ResourceArn
 * @property 'AWS_MANAGED'|'AWS_RAM' $PolicyType
 * @property string|null $PolicyVersionArn
 * @property string $PolicyName
 * @property string $PolicyDocument
 */
class GetResourcePolicyResponse extends Response
{
}
