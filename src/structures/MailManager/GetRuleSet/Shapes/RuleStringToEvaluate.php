<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MAIL_FROM'|'HELO'|'RECIPIENT'|'SENDER'|'FROM'|'SUBJECT'|'TO'|'CC'|null $Attribute
 * @property string|null $MimeHeaderAttribute
 * @property Analysis|null $Analysis
 * @property 'CN'|'SAN_RFC822_NAME'|'SAN_DNS_NAME'|'SAN_DIRECTORY_NAME'|'SAN_UNIFORM_RESOURCE_IDENTIFIER'|'SAN_IP_ADDRESS'|'SAN_REGISTERED_ID'|'SERIAL_NUMBER'|null $ClientCertificateAttribute
 */
class RuleStringToEvaluate extends Shape
{
    /**
     * @param array{
     *     Attribute?: 'MAIL_FROM'|'HELO'|'RECIPIENT'|'SENDER'|'FROM'|'SUBJECT'|'TO'|'CC'|null,
     *     MimeHeaderAttribute?: string|null,
     *     Analysis?: Analysis|null,
     *     ClientCertificateAttribute?: 'CN'|'SAN_RFC822_NAME'|'SAN_DNS_NAME'|'SAN_DIRECTORY_NAME'|'SAN_UNIFORM_RESOURCE_IDENTIFIER'|'SAN_IP_ADDRESS'|'SAN_REGISTERED_ID'|'SERIAL_NUMBER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
